<template>
    <div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <a @click="addData('Hallo Arjun')" class="btn btn-primary"> {{tombol}} </a>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                Footer
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tombol: 'tambah user'
            }
        },
        methods: {
            addData: function(kata){
                alert(kata);
            }
        },
    }

</script>
