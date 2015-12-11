<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SourceController extends Controller
{
    /**
     * Remove the specified source from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /* Find source, redirect to edit page if source not found */
      $source = \App\Source::find($id);
      if(is_null($source)){
        return \Redirect::back()->with('message','Source not found!');
      }

      /* If source found delete and send back to original page.
      No flash message needed since user will have visual confirmation
      on the form. */
      $source->delete();
      return \Redirect::back();
    }
}
