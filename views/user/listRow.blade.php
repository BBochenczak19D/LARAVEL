<tr>
    <td>{{$userData['id']}}</td>
    <td>{{$userData['name']}}</td>
    <td>
        <a href="{{route('get.users.show',[
            'userId' => $userData['id']
            ])
        }}"
        >
            Szczegóły
        </a>
    </td>
</tr>
