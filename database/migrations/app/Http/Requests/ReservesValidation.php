<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//*************************************************************
// Rule
//1.  use App\Http\Requests\ReservesValidation; //Add Controller
//2.  public function store( ReservesValidation $request ){ //example
//*************************************************************

class ReservesValidation extends FormRequest
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
				"students_id" => "nullable|integer", //integer('students_id')->nullable()
				"lessons_id" => "nullable|integer", //integer('lessons_id')->nullable()
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



