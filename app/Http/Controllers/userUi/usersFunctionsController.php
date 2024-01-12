<?php

namespace App\Http\Controllers\userUi;

use App\Http\Controllers\Controller;
use App\Models\Personal_form;
use Illuminate\Http\Request;

class usersFunctionsController extends Controller
{

    // Sore Function in dataBase;
    public function store(Request $request)
    {
        $currentDate = date('Y-m-d');
        // $request->validate([

        //     'expire_data_id' => "required|date|after_or_equal:$currentDate",
        // ]);
        // dd($request);
        $request->validate([
            'name' => 'required',
            'typeofId' => 'required',
            'image_id' => ' image|mimes:jpeg,png,jpg,gif|max:2048',
            'numberOfId' => 'required|unique:personal_form,numberOfId',
            'area' => 'required',
            'city' => 'required',
            'expire_data_id' => "required|date|after_or_equal:$currentDate",
            'age' => 'required|numeric',
            'nationality' => 'required',
            'gendar' => 'required',
            'jobType' => 'required',
            'image_job_status' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'employer' => 'required',
            'relationStatus' => 'required',
            'marital_image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'marital_image2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'salarytype' => 'required',
            'total_salary' => 'required|numeric',
            'total_salary_with_you' => 'required|numeric',
            'helthStatus' => 'required',
            'health_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'educational_level' => 'required',
            'rent' => 'required',
            'rent_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_address' => 'required',
            'phone' => 'required',
            'bank' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',

            // 'confirmationCheckbox' => 'required|accepte',
        ]);

        $location = public_path('./upload/personalForm');

        $newForm = new Personal_form();
        $newForm->name  = $request->name;
        $newForm->typeofId  = $request->typeofId;
        // Image 1
        if ($request->hasFile('image_id')) {
            $image_id = $request->file('image_id');
            $image_id_name = time() . rand(0, 255) . rand(0, 255) .  $image_id->getClientOriginalName();
            $image_id->move($location, $image_id_name);
            $newForm->image_id = $image_id_name;
        }

        // End Image 1
        $newForm->numberOfId  = $request->numberOfId;
        $newForm->area  = $request->area;
        $newForm->city  = $request->city;
        $newForm->expire_data_id  = $request->expire_data_id;
        $newForm->age  = $request->age;
        $newForm->nationality  = $request->nationality;
        $newForm->gendar  = $request->gendar;
        $newForm->jobType  = $request->jobType;

        // Image 2
        if ($request->hasFile('image_job_status')) {
            $job_status_image = $request->file('image_job_status');
            $job_status_name = time() . rand(0, 255) . rand(0, 255) .  $job_status_image->getClientOriginalName();
            $job_status_image->move($location, $job_status_name);
            $newForm->image_job_status = $job_status_name;
        }

        // End Image 2

        $newForm->employer  = $request->employer;
        $newForm->relationStatus  = $request->relationStatus;
        // Image 3
        if ($request->hasFile('marital_image1')) {
            $marital_image1 = $request->file('marital_image1');
            $marital_image1_name = time() . rand(0, 255) . rand(0, 255) .  $marital_image1->getClientOriginalName();
            $marital_image1->move($location, $marital_image1_name);
            $newForm->marital_image1 = $marital_image1_name;
        }

        // End Image 3

        // Image 4
        if ($request->hasFile('marital_image2')) {
            $marital_image2 = $request->file('marital_image2');
            $marital_image2_name = time() . rand(0, 255) . rand(0, 255) .  $marital_image2->getClientOriginalName();
            $marital_image2->move($location, $marital_image2_name);
            $newForm->marital_image2 = $marital_image2_name;
        }

        // End Image 4
        $selectedSalaryTypes = $request->input('salarytype', []);

        // Convert array to comma-separated string
        $selectedTypesString = implode(', ', $selectedSalaryTypes);

        $newForm->salarytype  =  $selectedTypesString;
        $newForm->total_salary  = $request->total_salary;
        $newForm->total_salary_with_you  = $request->total_salary_with_you;
        $newForm->helthStatus  = $request->helthStatus;
        // Image 5
        if ($request->hasFile('health_image')) {
            $health_image = $request->file('health_image');
            $health_image_name = time() . rand(0, 255) . rand(0, 255) .  $health_image->getClientOriginalName();
            $health_image->move($location, $health_image_name);
            $newForm->health_image = $health_image_name;
        }

        // End Image 5

        $newForm->educational_level  = $request->educational_level;
        $newForm->rent  = $request->rent;
        // Image 6
        if ($request->hasFile('rent_image')) {
            $rent_image = $request->file('rent_image');
            $rent_image_name = time() . rand(0, 255) . rand(0, 255) .  $rent_image->getClientOriginalName();
            $rent_image->move($location, $rent_image_name);
            $newForm->rent_image = $rent_image_name;
        }

        // End Image 6
        $newForm->national_address  = $request->national_address;
        $newForm->phone  = $request->phone;
        $newForm->bank  = $request->bank;
        $newForm->account_holder  = $request->account_holder;
        $newForm->account_number  = $request->account_number;
        $newForm->description_request  = $request->description_request;
        $newForm->confirmationCheckbox  = $request->confirmationCheckbox;

        // Genrate Request Number;
        $lastRecord = Personal_form::latest('id')->first();
        $request_number = 1000;
        if ($lastRecord) {
            $request_number = $lastRecord->request_number + 1;
        }
        $newForm->request_number = $request_number;
        // Save the new form
        $newForm->save();
        // return 'done';
        return redirect()->back()->with('success', $request_number);
    }


    public function ifFindOldRequest(Request $request)
    {
        $request->validate([
            'numberOfId' => "required|size:10"
        ]);
        $numberOfId = $request->numberOfId;
        $data = Personal_form::where('numberOfId', '=', $numberOfId)->first();

        if ($data) {
            $request_number = $data->request_number;
            return redirect()->back()->with('success', $request_number);
        } else {
            return redirect()->route('user.applyPage');
        }
    }

    public function findMyRequest(Request $request)
    {
        $request_number = $request->request_number;
        $numberOfId = $request->numberOfId;
        $data = Personal_form::where('numberOfId', '=', $numberOfId)
            ->where('request_number', '=', $request_number)
            ->first();
        if ($data) {
            return view('userPages.yourRequest', compact('data'));
            // return redirect()->back()->with('success', "        لسه       ");
        } else {
            return redirect()->back()->with('success', "لا يوجد طلب");
        }
    }
}
