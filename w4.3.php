<?php
trait Validatable {
    public function validate($data) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return "{$key} Не может быть пустым.";
            }
        }
        return "Валидация успешна.";
    }
}

class RegistrationForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        print $validationResult;
    }
}

class LoginForm {
    use Validatable;

    public function submit($data) {
        $validationResult = $this->validate($data);
        print $validationResult;
    }
}

$registrationData = ['username' => 'JohnDoe', 'password' => ''];
$registrationForm = new RegistrationForm();
$registrationForm->submit($registrationData);

print "<br>";

$loginData = ['username' => 'JohnDoe', 'password' => 'password123'];
$loginForm = new LoginForm();
$loginForm->submit($loginData);