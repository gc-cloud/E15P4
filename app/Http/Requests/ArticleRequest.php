<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class ArticleRequest extends Request
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
      /* Validator: Create an array with all validation rules */
      $rules = [
        'title' => 'required|min:5|max:30',
        'bottomline' => 'required|max:65',
        'body' => 'required|min:5|max:2500',
        'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg',
      ];

      /* Validator: loop through dynamically generated fields to
      make sure all input is checked . Assumes that Source and URL
      fields come in pairs with the same key*/
      if($this->request->get('sources')){
        foreach($this->request->get('sources') as $key => $val){
          $rules['sources.'.$key] = 'required';
          $rules['urls.'.$key] = 'required|url';
        }
      }
      /* Validator: If not checkbox is selected , add a rule to indicate that
      say that a category field is required */
      if($this->request->get('categories')){
        $found_categories=true;
      } else {
        $found_categories=false;
      }
      if(!$found_categories){
        $rules['Category'] = 'required';
      }

      return $rules;
    }

    public function messages()
    {
      $messages = [];
      /*Loop through sources to produce custom messages.  Assummes that sources
      and urls come in pairs with the same key */
      if($this->request->get('sources')){
        foreach($this->request->get('sources') as $key => $val)
        {
          $messages['sources.'.$key.'.required'] = 'The Source field # '.$key.' is required.';
          $messages['sources.'.$key.'.min'] = 'The Source field # '.$key.' must be at least 10 characters.';
          $messages['urls.'.$key.'.required'] = 'All URL fields are required.';
          $messages['urls.'.$key.'.url'] = 'The URL ['.$key.'] does not seem to be working.';
        }
      }

      return $messages;

    }
}
