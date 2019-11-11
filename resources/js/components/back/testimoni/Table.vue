<template>
    <div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <a :href="$store.state.apiUrl + 'testimoni/form'" class="btn btn-primary">Tambah Testimoni</a>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Testimoni</th>
                            <th>Profesi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="testimoni in testimonis.data" :key="testimoni.id">
                            <td> {{testimoni.name}} </td>
                            <td> {{testimoni.testimoni}} </td>
                            <td> {{testimoni.profesi}} </td>
                            <td></td>
                            <td>
                                <a href=""
                                    class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                                <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
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
            testimonis: {},
        }
    },
    mounted() {
        this.getData();
    },
}
</script>
