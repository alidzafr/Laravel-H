<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('resume.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required>

    <select name="gender" required>
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    <div id="skills">
        <input type="text" name="skills[]" placeholder="Skill">
    </div>

    <button type="button" onclick="addSkill()">+ Add Skill</button>

    <button type="submit">Save</button>
</form>

<script>
function addSkill() {
    const div = document.createElement('div');
    div.innerHTML = `<input type="text" name="skills[]" placeholder="Skill">`;
    document.getElementById('skills').appendChild(div);
}
</script>

</body>
</html>