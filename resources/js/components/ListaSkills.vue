<template>
    <div>
        <ul class="flex flex-wrap justify-center">
            <li class="border border-gray-500 px-10 py-3 mb-3 rounded mr-4"
                :class="verificarClaseActiva(skill)"
                v-for="( skill, i ) in this.skills"
                v-bind:key="i"
                @click="activar($event)"
                >{{ skill }}</li>
        </ul>

        <input type="hidden" name="skills" id="skills">
    </div>
</template>

<script>
export default {
    props: ['skills', 'oldskills'],
    created: function() {
        if(this.oldskills) {
            const skillsArray = this.oldskills.split(',');
            skillsArray.forEach( skill => this.habilidades.add(skill) );
        }
    },
    mounted: function() {
        document.querySelector('#skills').value = this.oldskills;
    },
    data: function() {
        return {
            habilidades: new Set()
        }
    },
    methods: {
        activar(e) {
            if(e.target.classList.contains('bg-green-400')) {
                e.target.classList.remove('bg-green-400');
                this.habilidades.delete(e.target.textContent);
            } else {
                e.target.classList.add('bg-green-400');
                this.habilidades.add(e.target.textContent);
            }

        // Agregar habilidades a input hidden
        const stringHabilidades = [...this.habilidades]
        document.querySelector('#skills').value = stringHabilidades;

        },
        verificarClaseActiva(skill) {
            return this.habilidades.has(skill) ? 'bg-green-400' : '';
        }

    }
}
</script>
