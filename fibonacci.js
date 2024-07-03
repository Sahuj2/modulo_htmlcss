console.log('  Fibonacci')

let first = 0
let second = 1
let next = 0
let fibonacci = ""

fibonacci += first + " " + second

for(let i = 1; i <= 10; i++){
    next = first + second
    fibonacci += " " + next
    first = second
    second = next
}

console.log (fibonacci)