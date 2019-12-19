<title>Delete Data of Company</title>
<div>
    <form action="companydelete" method="POST">
                @csrf

                <select name="id">
                    <option value="1">Samsung</option>
                    <option value="3">Nokia</option>
                    <option value="4">Apple</option>
                </select>
                <br>
                <br>
                @csrf
                <button type="submit">Delete</button>
    </form>
</div>