<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//*************************************************************
// Rule
//1.  use App\Http\Requests\NavigatorsValidation; //Add Controller
//2.  public function store( NavigatorsValidation $request ){ //example
//*************************************************************

class NavigatorsValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //[ *1. default=false ]
    }
    
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //[ *2. Validation rule description location ]
        return [
				"name" => "nullable|max:255", //string('name',255)->nullable()
				"email" => "required|max:255", //string('email',255)
				"flag" => "nullable|integer", //integer('flag')->nullable()
				"login_id" => "nullable|max:255", //string('login_id',255)->nullable()
				"pass" => "required|max:255", //string('pass',255)
				"tel" => "nullable|integer", //integer('tel')->nullable()
				"photo" => "nullable", //text('photo')->nullable()
				"register_date" => "nullable|date_format:Y-m-d H:i:s", //datetime('register_date')->nullable()
				"change_date" => "nullable|date_format:Y-m-d H:i:s", //datetime('change_date')->nullable()

            ];
        }
    
        //[ *3. Set Validation message (*Optional) ]
        //Be sure to use [messages] for the Function name.
        //[Ja]https://readouble.com/laravel/6.x/ja/validation-php.html
        public function messages(){
            return [
                //"email.required"  => "メールアドレスを入力してください",
                //"email.max"       => "**文字以下で入力してください",
            ];
        }
    
    }



