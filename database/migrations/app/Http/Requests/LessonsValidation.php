<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

//*************************************************************
// Rule
//1.  use App\Http\Requests\LessonsValidation; //Add Controller
//2.  public function store( LessonsValidation $request ){ //example
//*************************************************************

class LessonsValidation extends FormRequest
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
				"title" => "nullable|max:255", //string('title',255)->nullable()
				"text" => "nullable", //text('text')->nullable()
				"price" => "nullable|integer", //integer('price')->nullable()
				"date" => "nullable|date_format:Y-m-d H:i:s", //datetime('date')->nullable()
				"photo" => "nullable", //text('photo')->nullable()
				"teachers_id" => "nullable|integer", //integer('teachers_id')->nullable()
				"teachers_name" => "nullable|max:255", //string('teachers_name',255)->nullable()
				"teachers_photo" => "nullable", //text('teachers_photo')->nullable()
				"navigators_id" => "nullable|integer", //integer('navigators_id')->nullable()
				"navigators_name" => "nullable|max:255", //string('navigators_name',255)->nullable()
				"navigators_photo" => "nullable", //text('navigators_photo')->nullable()
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



