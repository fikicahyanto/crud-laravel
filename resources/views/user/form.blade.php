<table>
    <tr>
        <td>Name</td><td>{{Form::text('name',null)}}</td>
    </tr>
    <tr>
        <td>Email</td><td>{{Form::email('email',null)}}</td>
    </tr>
    <tr>
        <td>password</td><td>{{Form::password('password')}}</td>
    </tr>
    <tr>
        <td></td><td>{{Form::submit('save data')}}</td>
    </tr>
</table>