// Display the current year in the footer
const currentYearEl = <HTMLDivElement>document.getElementById('currentYear')
currentYearEl.innerText = new Date().getFullYear().toString()
