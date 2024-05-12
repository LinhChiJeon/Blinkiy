// const listcard=document.querySelector('.carousel');

const listcard=[...document.querySelectorAll('.carousel')];
const nxtbtn=[...document.querySelectorAll('.nxt-btn')];
const prebtn=[...document.querySelectorAll('.pre-btn')];


listcard.forEach((item,i)=>{
    let current=0;
    let length=listcard.length;
    nxtbtn[i].addEventListener('click', ()=>
    {
        if(current!=2)
        {
            current++;
            let width= item.offsetWidth;
            item.scrollLeft=width*current;
            
        }
        else
        {
            current=0;
            item.scrollLeft=0;  
        }
    });
    prebtn[i].addEventListener('click', ()=>
    {
        current--;
        let width= item.offsetWidth;
        item.scrollLeft=width*current;
    });

})

// const cards=document.getElementsByClassName('product-card');

// let current=0;
// let length=cards.length;

// listcard.forEach((item,i)=>{
//     let current=0;
//     const cards=item.getElementsByClassName('product-card');
//     let length=cards.length;
//     nxtbtn[i].addEventListener('click', ()=>
//     {
//         if(current!=length-4)
//         {
//             current++;
//             let width= cards[0].offsetWidth;
//             item.scrollLeft=width*current +44*current;
//         }
//         else
//         {
//             current=0;
//             item.scrollLeft=0;
//         }
//     });
//     prebtn[i].addEventListener('click', ()=>
//     {
//         current--;
//         let width= cards[0].offsetWidth;
//         item.scrollLeft=width*(1)*current +44*current;
//     });

// })
