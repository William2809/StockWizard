require('./bootstrap');

import Alpine from 'alpinejs';
import Datepicker from '@themesberg/tailwind-datepicker/Datepicker';
import DateRangePicker from '@themesberg/tailwind-datepicker/DateRangePicker';
window.Alpine = Alpine;

Alpine.start();

const datepickerEl = document.getElementById('datepickerId');
new Datepicker(datepickerEl, {
    // options
}); 
const dateRangePickerEl = document.getElementById('dateRangePickerId');
new DateRangePicker(dateRangePickerEl, {
    // options
}); 