        URL                         Request Methods     Controller@method           form method
https://127.0.0.1:8000/cats             get             CategoryController@index        get    
https://127.0.0.1:8000/cats/create      get             CategoryController@create       get
https://127.0.0.1:8000/cats/{id}/edit   get             CategoryController@edit         get
https://127.0.0.1:8000/cats/            post            CategoryController@store        post
https://127.0.0.1:8000/cats/{id}        put|patch       CategoryController@update       post
https://127.0.0.1:8000/cats/{id}        delete          CategoryController@destroy      post
https://127.0.0.1:8000/cats/{id}        get             CategoryController@show         get


@method('put')
@method('patch')
@method('delete')
@csrf(cross site request forgery)