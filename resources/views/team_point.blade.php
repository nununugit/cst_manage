<div class="container">
    <table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">
        <p>
     チーム名：{{ $team_name->gname }}
        </p>
    <tr>
    <th bgcolor="#EE0000"><font color="#FFFFFF">No.</font></th>
    <th bgcolor="#EE0000" width="150"><font color="#FFFFFF">時間</font></th>
    <th bgcolor="#EE0000" width="200"><font color="#FFFFFF">確認ボタン</font></th>
    </tr>
    
    @foreach($team_counts as $team_count)
    <tr>
    <td  align="right" nowrap>{{ $team_count->id }}</td>
    <td  valign="top" width="150">{{ $team_count->request_time }} </td>
    <td  valign="top" width="200">

        <form action="/cst2020/manage/team_discount/{{$team_count->group_gid}}" method="POST">
        @csrf
                <input type="hidden" name='id' value= "{{ $team_count->id }}">
                <input type="hidden" name='gid' value= "{{ $team_count->group_gid }}">
                <input type="submit" value="submit">

        </form>
        
    @endforeach

        </td>
    </tr>
                </table>
    </div>