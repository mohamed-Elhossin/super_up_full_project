<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Personal_form;
class ExportOneRequest implements FromCollection
{
    protected $id;

    // Constructor to accept the ID
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Fetch the specific row by ID
        $personalForm = Personal_form::find($this->id);

        // Return the collection with a single row
        return collect([$personalForm]);
    }

    public function headings(): array
    {
        // Define column names as headings
        return [
            'رقم',
            'اسم',
            'نوع البطاقه',
            'اسم الصوره',
            'رقم البطاقه',
            'المنطقه',
            'المدينه',
            'تاريخ انتهاء البطاقه',
            'العمر',
            'الجنسيه',
            'الجنس',
            'نوع العمل',
            'صوره العمل',
            'صاحب العمل',
            'نوع العلاقه',
            'صوره ',
            'صوره',
            'نوع الراتب',
            'اجمالي الراتب',
            'الحاله الصحيه',
            'صوره',
            'مستوي التعليم',
            'نوع السكن',
            'صووره',
            'العنوان الوطني',
            'رقم الهاتف',
            'الحساب',
            'صاحب الحساب',
            'رقم الحساب',
            'وصف الطلب',
            'رقم الطلب',
            'حاله الطلب',
            'المسؤال',
            'تاريخ التغيير',
        ];
    }
}
