<template>
    <div class="option-wrapper">
        <div :class="{ 'custom-checkbox': (type == 'checkbox'), 'custom-radio': (type == 'radio') ,'custom-control': true }">
            <input
                :name="'ballot[' + option.question_id + ']'"
                :value="option.id"
                :type="type"
                :disabled="disabled"
                :checked="selected"
                @change="selectOption(option, type)"
                class="custom-control-input" />

            <span class="custom-control-indicator"></span>

            <span class="custom-control-description">
                <span class="option-name">{{ option.option }}</span>
                <span v-if="displayCost && option.cost > 0" class="option-cost">{{ option.cost | formatCurrency }}</span>
            </span>
        </div>
        <i :class="'icon far fa-' + option.icon"></i>
        <a href="#" v-if="option.description" class="option-info" @click.prevent="displayInfo">{{ $t('booth_option.more_info') }}</a>
    </div>
</template>

<script>
    import format from 'format-number';

    export default {
        name: 'ballot-option',

        props: {
            option: Object,
            type: String,
            selected: Boolean,
            disabled: Boolean,
            displayCost: Boolean
        },

        filters: {
            formatCurrency: function(value) {
                return format({ suffix: '€', integerSeparator: '.', round: 0 })(value);
            }
        },

        methods: {
            selectOption(option, type) {
                Bus.$emit('optionSelected', option, type);
            },

            displayInfo() {
                Bus.$emit('openOptionModal', this.option, this.type, true, this.selected);
            }
        }
    }
</script>

<style scoped lang="scss">
    @import '../../../sass/_variables';

    .option-wrapper {
      margin-right: 3rem;
    }

    .option-name {
        margin-right: 0.25rem;
    }

    .option-cost {
        color: lighten($gray-light, 10%);
        margin-right: 0.25rem;
    }

    .option-info {
        position: absolute;
        right: 1rem;
        bottom: 0.75rem;
        z-index: 100;
    }

    .costum-control-indicator {
        background: rgba(0, 0, 0, 0.5);
    }

    .disabled {
        .option-name, .option-cost {
            color: lighten($gray-light, 20%);
        }

        a {
            color: $gray-light;
        }
    }

    .icon {
      position: absolute;
      bottom: 1rem;
      right: 1rem;
      font-size: 4rem;
      opacity: 0.1;
    }
</style>
