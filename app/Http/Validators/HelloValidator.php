<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
  public function validateHello($attribute, $value,$parameters)
  {
    return $value % 2 == 0;
  }
}

// use Iluminate\Validation\Validator;

// class クラス名 extends Validator
// {
//   public function validate〇〇（ルール名）($attribute, $value,$parameters)
//   {
//     バリデーションの処理
//     return 真偽値
//   }
// }
