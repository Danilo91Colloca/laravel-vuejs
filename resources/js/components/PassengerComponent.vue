<template>
    <div class="passeggeri">
        <ul>
            <li>
                Name: {{passengerCard.name}}
            </li>
            <li>
                Lastname: {{passengerCard.lastname}}
            </li>
            <li>
                Age: {{passengerCard.age}}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: 'PassengerComponent',
    props: {
        passengerCard: Object
    }
}
</script>
