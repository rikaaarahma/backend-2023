// producing promise
const persiapan = () => {
    return new Promise((resolve, reject) => {
        setTimeout(()=>{
            resolve("Menyiapkan bahan...");
        }, 3000);
    });
};

const rebusAir = () => {
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("Rebus Air...");
        }, 7000);
    });
};

const masak = () => {
    return new Promise((resolve)=>{
        setTimeout(()=>{
            resolve("Masak Mie...");
        }, 5000);
    });
};

// consuming promise
const main = () => {
    persiapan()
        .then((res)=>{
            console.log(res);
            return rebusAir();
        })
        .then((res)=>{
            console.log(res);
            return masak();
        })
        .then((res)=>{
            console.log(res);
        });
}

main();