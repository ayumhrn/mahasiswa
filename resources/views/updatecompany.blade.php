<title>Update Data of Company</title>
<div>
    <form action="companyupdate" method="POST">
            @csrf

            <select name="id">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            <br>

            <input type="text" name="name_company" placeholder="Company's name">
            <br>
            <br>
            <input type="text" name="address" placeholder="Company's address">
            <br>
            <br>
            <button type="submit">Update</button>
    </form>
</div>