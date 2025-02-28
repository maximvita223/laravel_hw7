<!doctype html>
<html>
    <form action="{{ Route('storeUser') }}" method="post">
        @csrf
        <div>
            <label for="name">Имя</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="surname">Фамилия</label>
            <input type="text" name="surname" id="surname">
        </div>
        <div>
            <label for="email">Почта</label>
            <input type="email" name="email" id="email">
        </div>
        <button type="submit">Создать</button>     
    </form>
</html>    