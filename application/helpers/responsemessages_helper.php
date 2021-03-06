<?php

class ResponseMessages{

    public static function getStatusCodeMessage($status)
    {
        $CI =& get_instance();
        $codes = Array(
            100 => "Invalid API key",
            101 => "Invalid Auth Token",
            102 => "Invalid username",
            103 => "Invalid Input Parameters",
            104 => "An Error Occurred in User Registration",
            105 => "Invalid email/password",
            106 => "User logged in successfully.",
            107 => "User not found",
            108 => "Profile updated successfully.",
            109 => "An error occurred please try again.",
    		110 => "User registered successfully.",
    		112 => "Please select image.",
    		113 => "Please select video.",
    		114 => "No results found.",
    		115 => "You are temporarily blocked.",
    		116 => "User already exist.",
    		117 => "Email already exist.",
    		118 => "Something went wrong",
    		119 => "All fields are required",
    		120 => "Please check your mail to reset your password.",
            121 => "Your account has been blocked by admin.", 
            122 => "Contact number already exist.",
            123 => "You have already join",
            124 => "Please check your mail to recieve your varification code.",
            125 => "User Id is required",
            126 => "successfully added",
            127 => "Already exist",
            128 => "Registration successfully done.",
            129 => "Status updated successfully",
            130 => "Delete successfully",
            131 => "Request delete successfully",
            132 => "Request accept successfully",
            133 => "Request send successfully",
            134 => "Not registered",
            135 => "User registered",
            136 => "Request cancel successfully",
            137 =>   "Logged out successfully.",
            138 =>  "Image uploaded successfully.",
            138 =>  "Profile not updated.",
            139 =>  "Registration Successfull.",
            140 =>  "Password changed successfully.",
            141 =>  "Old password do not match.",
            142 => "Please check your mail to reset your password",
            143 => "Invalid email id",
            144 => "Sorry! profile update failed.",
            145 => "Password reset successfully.",
            146 => "Cannt set password please gentrate new link.",
            147 => "Sorry we are unable to complete your request right Now.",
            148 => "Password changed successfully.",
            149 => "Password not changed.",
            150 => "Old password does not match.",
            151 => "Post successfully added.",
            152 => "Post can't be posted right now.",
            153 => "Updated successfully.",
            154 => "Sorry can't update.",
            155 => "Data Inserted Successfully.",
            156 => "Data not inserted.",
            157 => "Your selected data.",
            158 => "No data found.",
            159 => "Tags selected.",
            160 => "Image can't be added right now.",
            161 => "Selected categories.",
            162 => "Please select image.",
            163 => "Sorry can't accept your request.",
            164 => "Data for transfer inventory.",
            165 => "Selected data for post.",
            166 => "Categories.",
            167 => "Sources added successfully.",
            168 => "Sources updated successfully.",
            169 => "Only 20 sources allowed.",
            170 => "Languages added.",
            171 => $CI->lang->line("error_added_successfully_language"),
            172 => $CI->lang->line("error_no_changes"),
            173 => $CI->lang->line("error_fullname"),
            174 => $CI->lang->line("success_favorite"),
            175 => $CI->lang->line("error_favorite"),

           
           
            
    
            
            
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            305 => 'Use Proxy',
            306 => '(Unused)',
            307 => 'Temporary Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Request Entity Too Large',
            414 => 'Request-URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Requested Range Not Satisfiable',
            417 => 'Expectation Failed',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported'
        );

        
        
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
}

?>
