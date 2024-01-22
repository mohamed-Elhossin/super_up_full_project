<?php

namespace App\Exports;

use App\Models\Personal_form;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RequestExportData implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Personal_form::all();
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
