<div class="container">
    <table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">
    @foreach($team_names as $team_name)   
        <p>
     チーム名：{{ $team_name->gname }}
     <form action="/cst2020/manage/attack/{{$team_name->gid}}" method="POST">
        @csrf
        <input type="hidden" name='gid' value= "{{ $team_name->gid }}">
        <input type="submit" value="submit">
     </form>
        </p>
    @endforeach
</div>