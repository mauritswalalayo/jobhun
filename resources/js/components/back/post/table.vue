<template>
    <div>
        <div class="box box-primary">
    <div class="box-header with-border">
        <a :href="$store.state.apiUrl + 'post/form'" class="btn btn-primary">Tambah Post</a>


    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Url</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box-footer">
    </div>
</div>
    </div>
</template>

<script>
export default {

}
</script>