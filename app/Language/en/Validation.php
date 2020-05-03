<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} is not a valid rule.',
   'groupNotFound'         => '{0} is not a validation rules group.',
   'groupNotArray'         => '{0} rule group must be an array.',
   'invalidTemplate'       => '{0} is not a valid Validation template.',

	// Rule Messages
   'alpha'                 => 'Kolom {field} field may only contain alphabetical characters.',
   'alpha_dash'            => 'Kolom {field} field may only contain alphanumeric, underscore, and dash characters.',
   'alpha_numeric'         => 'Kolom {field} field may only contain alphanumeric characters.',
   'alpha_numeric_punct'   => 'Kolom {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
   'alpha_numeric_space'   => 'Kolom {field} field may only contain alphanumeric and space characters.',
   'alpha_space'           => 'Kolom {field} field may only contain alphabetical characters and spaces.',
   'decimal'               => 'Kolom {field} field must contain a decimal number.',
   'differs'               => 'Kolom {field} field must differ from Kolom {param} field.',
   'equals'                => 'Kolom {field} field must be exactly: {param}.',
   'exact_length'          => 'Kolom {field} field must be exactly {param} characters in length.',
   'greater_than'          => 'Kolom {field} field must contain a number greater than {param}.',
   'greater_than_equal_to' => 'Kolom {field} field must contain a number greater than or equal to {param}.',
   'hex'                   => 'Kolom {field} field may only contain hexidecimal characters.',
   'in_list'               => 'Kolom {field} field must be one of: {param}.',
   'integer'               => 'Kolom {field} harus berisi integer.',
   'is_natural'            => 'Kolom {field}  must only contain digits.',
   'is_natural_no_zero'    => 'Kolom {field}  must only contain digits and must be greater than zero.',
   'is_not_unique'         => 'Kolom {field}  must contain a previously existing value in Kolom database.',
   'is_unique'             => 'Kolom {field}  must contain a unique value.',
   'less_than'             => 'Kolom {field}  must contain a number less than {param}.',
   'less_than_equal_to'    => 'Kolom {field}  must contain a number less than or equal to {param}.',
   'matches'               => 'Kolom {field} harus sama dengan Kolom {param}.',
   'max_length'            => 'Kolom {field} tidak boleh melebihi {param} characters in length.',
   'min_length'            => 'Kolom {field} setidaknya harus {param} panjang karakter  .',
   'not_equals'            => 'Kolom {field} field cannot be: {param}.',
   'numeric'               => 'Kolom {field} harus berisi angka.',
   'regex_match'           => 'Kolom {field} tidak dalam format yang benar.',
   'required'              => 'Kolom {field} harus di isi.',
   'required_with'         => 'Kolom {field} field is required when {param} is present.',
   'required_without'      => 'Kolom {field} field is required when {param} is not present.',
   'timezone'              => 'Kolom {field} field must be a valid timezone.',
   'valid_base64'          => 'Kolom {field} field must be a valid base64 string.',
   'valid_email'           => 'Kolom {field} field must contain a valid email address.',
   'valid_emails'          => 'Kolom {field} field must contain all valid email addresses.',
   'valid_ip'              => 'Kolom {field} field must contain a valid IP.',
   'valid_url'             => 'Kolom {field} field must contain a valid URL.',
   'valid_date'            => 'Kolom {field} field must contain a valid date.',

	// Credit Cards
   'valid_cc_num'          => '{field} does not appear to be a valid credit card number.',

	// Files
   'uploaded'              => '{field} is not a valid uploaded file.',
   'max_size'              => '{field} is too large of a file.',
   'is_image'              => '{field} is not a valid, uploaded image file.',
   'mime_in'               => '{field} does not have a valid mime type.',
   'ext_in'                => '{field} does not have a valid file extension.',
   'max_dims'              => '{field} is eiKolomr not an image, or it is too wide or tall.',
];
