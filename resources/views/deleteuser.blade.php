<title>Delete User </title>
<div>
    <form action="userdelete" method="POST">
                @csrf

                <select name="id">
                    <option value="1">Ayu</option>
                    <option value="3">Rachel</option>
                    <option value="4">Zain</option>
                </select>
                <br>
                <br>
                @csrf
                <button type="submit">Delete</button>
    </form>
</div>