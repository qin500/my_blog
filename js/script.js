Qin500 = {
    formatDate: function (type = "default") {
        if (type === "default") {
            let date = new Date();
            let d = date.getFullYear().toString() + "-" + (date.getMonth() + 1).toString().padStart(2, "0") + "-" +
                date.getDate().toString() + " " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds().toString().padStart(2,'0');
            return d;
        }
    }
};


document.querySelector('.fix-evident .item [data-scrolltop]').addEventListener('click',function (e) {
    document.body.scrollIntoView({behavior: 'smooth', block: 'start'})
})


setInterval(()=>{
    document.querySelector(".tophead .welcome .time").innerText=Qin500.formatDate()
},1000)


