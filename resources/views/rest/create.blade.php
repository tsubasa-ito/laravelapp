<table>
    <form action="/rest" method="POST">
    {{ csrf_field() }}
    <tr><th>message: </th><td><input type="text" name="message" value="{{old('messsage')}}"></td></tr>
    <tr><th>url: </th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
