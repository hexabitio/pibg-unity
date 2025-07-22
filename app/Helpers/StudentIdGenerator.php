<?php

namespace App\Helpers;

use App\Models\Student;
use App\Models\MasterConfig;
use Carbon\Carbon;

class StudentIdGenerator
{
    /**
     * Generate a unique student ID with prefix
     * Format: PREFIX + YYYY + 4-digit sequence number (0001, 0002, etc.)
     * 
     * @return string
     */
    public static function generate(): string
    {
        $currentYear = Carbon::now()->year;

        // Get the prefix from MasterConfig
        $prefixConfig = MasterConfig::where('id', 'CI_STUDENT_ID_PREFIX')->first();
        $prefix = $prefixConfig ? $prefixConfig->value_string : 'S'; // Default to 'S' if not found

        // Get the highest ID for the current year with the same prefix
        $latestStudent = Student::where('id', 'like', $prefix . $currentYear . '%')
            ->orderBy('id', 'desc')
            ->first();

        $nextSequence = 1;

        if ($latestStudent) {
            // Extract the last 4 digits and increment
            $lastSequence = (int) substr($latestStudent->id, -4);
            $nextSequence = $lastSequence + 1;
        }

        // Pad the sequence to 4 digits
        $paddedSequence = str_pad($nextSequence, 4, '0', STR_PAD_LEFT);

        return $prefix . $currentYear . $paddedSequence;
    }
}
