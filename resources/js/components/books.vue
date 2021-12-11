<template>
    <div>
        <h2 class="text-center">lista de reservas</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Actividad</th>
                <th>Fecha de reserva</th>
                <th>Total a pagar</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.cuname }}</td>
                <td>{{ book.actitle }}</td>
                <td>{{ book.date_activity }}</td>
                <td>${{ ((book.price_adult*book.adult_number) +(book.price_child*book.child_number)) }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                books: []
            }
        },
        created() {
            this.search('all');
        },
        methods: {
            search(type) {
                this.axios
                    .get('http://localhost:8000/api/books?typeOption='+type)
                    .then(response => {
                        this.books = response.data;
                    });
            }
        }
    }
</script>
