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
        'title' => 'required|min:10',
        'bottomline' => 'required|max:150',
        'body' => 'required|min:5|max:2500',
        'image' => 'image',
      ];

      /* Validator: loop through dynamically generated fields to
      make sure all input is checked . Assumes that Source and URL
      fields come in pairs with the same key*/
      if($this->request->get('sources')){
        foreach($this->request->get('sources') as $key => $val){
          $rules['sources.'.$key] = 'required|min:10';
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
          $messages['urls.'.$key.'.required'] = 'The URL field # '.$key.' is required.';
          $messages['urls.'.$key.'.url'] = 'The URL field # '.$key.' must be properly formatted.';
        }
      }

      return $messages;

    }



  /* Override native response so we can redirect to page with a parameter that
  can be used to replicate the dynamic fields that were submitted */
  public function response(array $errors)
  {
      if ($this->ajax() || $this->wantsJson()) {
          return new JsonResponse($errors, 422);
      }

      $countURL = count($this->request->get('urls'));
      \Session::flash('flash_message','Override RESPONSE ACTIVE. Total Sources: '.$countURL);
      return $this->redirector->to($this->getRedirectUrl())
                                      ->withInput($this->except($this->dontFlash))
                                      ->withErrors($errors, $this->errorBag);
  }
}
