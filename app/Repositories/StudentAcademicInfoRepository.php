<?php

namespace App\Repositories;

use App\Models\StudentAcademicInfo;

class StudentAcademicInfoRepository {
    public function store($request, $student_id) {
        try {
            StudentAcademicInfo::create([
                'student_id'        => $student_id,
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create Student academic information. '.$e->getMessage());
        }
    }
}