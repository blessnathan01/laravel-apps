# Laravel Livewire
## Steps to work with Livewire:
1. Use this command to use Livewire: **composer require livewire/livewire**
2. Add **@livewireStyles** before *head* closing tag and **@livewireScripts** before *body* closing tag in *welcome.blade.php*
3. Add **@livewire('component-name')** inside *welcome.blade.php*
4. Use this command to create a livewire component: **php artisan make:livewire component-name**
5. The command used, in step 4, will auto-generate two files: *component-name.blade.php* (template) and *ComponentName.php* (functionality)
6. You can write text inside the div tag inside *component-name.blade.php*
7. Also, you can pass data inside **[]** as the second argument of *view()* i.e *'var' => 'value'*
8. Use **{{ $var }}** inside *component-name.blade.php* to display the value
9. Use *public* property to declare a variable and assign it to value. Its effect is same as of step 7
10. To sync *input* element to a variable declared in *ComponentName.php*, you need to use **wire:model** attribute i.e *wire:model="var"*
