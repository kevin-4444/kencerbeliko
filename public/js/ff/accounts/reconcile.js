/*
 * reconcile.js
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III.  If not, see <http://www.gnu.org/licenses/>.
 */


$(function () {
    "use strict";
    $('input[type="date"]').on('change', showUpdateButton);
    $('.update_view').on('click', updateView);
});

function showUpdateButton() {
    $('.update_date_button').show();
}

function updateView() {
    var startDate = $('input[name="start_date"]').val();
    var endDate = $('input[name="end_date"]').val();
    window.location = '/accounts/reconcile/2/' + startDate + '/' + endDate;
    return false;
}
