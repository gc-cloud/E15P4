<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class Article2Request extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      $rules = [
        'title' => 'required|min:10',
        'bottomline' => 'required|max:150',
        'body' => 'required|min:5|max:2500',
      ];

      /*Loop through Source fields and validate */
      if($this->request->get('sources')){
        foreach($this->request->get('sources') as $key => $val)
        {
          $rules['sources.'.$key] = 'required|min:10';
        }
      }


      /*Loop through URL fields and validate */
      if($this->request->get('urls')){
        foreach($this->request->get('urls') as $key => $val)
        {
          $rules['urls.'.$key] = 'required|url';
        }
      }
      /*Future: develop custom validation rule to analyze number of
      Categories and confirm at least one has been selected*/

      return $rules;
    }

    public function messages()
    {
      $messages = [];
      /*Loop through sources to produce custom messages */
      if($this->request->get('sources')){
        foreach($this->request->get('sources') as $key => $val)
        {
          $messages['sources.'.$key.'.required'] = 'The Source field '.$key.' is required.';
          $messages['sources.'.$key.'.min'] = 'The Source field '.$key.' must be at least 10 characters.';
        }
      }
      /*Loop through urls to produce custome messages */
      if($this->request->get('urls')){
        foreach($this->request->get('urls') as $key => $val)
        {
          $messages['urls.'.$key.'.required'] = 'The URL field '.$key.' is required.';
          $messages['urls.'.$key.'.url'] = 'The URL field '.$key.' must be properly formatted.';
        }
      }
      return $messages;
    }
}
