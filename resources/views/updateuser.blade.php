<title>Update User</title>
<div>
    <form action="userupdate" method="POST">
            @csrf

            <select name="id">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            <br>

            <input type="text" name="name_user" placeholder="Name">
            <br>
            <br>
            <input type="text" name="gender" placeholder="Gender">
            <br>
            <br>
            <button type="submit">Update</button>
    </form>
</div>