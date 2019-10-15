import Vue from 'vue'

Vue.config.devtools = true

Nova.booting((Vue, router) => {
    Vue.component('index-nova-of-date-time', require('./components/OfDateTimeIndex'));
    Vue.component('detail-nova-of-date-time', require('./components/OfDateTimeDetail'));
    Vue.component('form-nova-of-date-time', require('./components/OfDateTimeForm'));
})
