const testPromise = new Promise((resolve, reject) => {
    const result = 5+5
    if (result === 10) {
        resolve('Erfüllt')
    }
    else {
        reject('Abgelehnt')
    }
})
testPromise.then(message => {
    console.log(message)
}).catch(message => {
    console.log(message)
})