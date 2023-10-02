<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'image' => ['required']
        ], [
            'name.required' => 'الرجاء ادخال اسم الشراكة',
            'name.string' => 'يجب ان يكون اسم الشراكة صحيحا',
            'name.min' => 'يجب الا يقل اسم الشركة عن 3 احرف',
            'image.required' => 'الرجاء تحميل صورة الشعار'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            if ($file->isValid()) {
                $path = $file->store('partners_logos', [
                    'disk' => 'public'
                ]);

                $request->merge([
                    'image_path' => $path
                ]);
            }
        }

        Partner::create([
            'name' => $request->name,
            'image_path' => $request->image_path
        ]);

        return redirect()->route('partners.index')->with('success', 'تمت إضافة شراكة جديدة');
    }

    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);

        $image_path = asset('storage/' . $partner->image_path);

        if (isset($image_path)) {
            Storage::disk('public')->delete($partner->image_path);
        }

        $partner->delete();

        return redirect()->route('partners.index')->with('warning', 'تم حذف الشراكة');
    }
}
