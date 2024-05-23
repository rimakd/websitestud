const data ={
    currentUser:{
        image:{
            jpg:".AZ.jpg",
            webp:".AZ.webp",
        },
        username:"juliusomo",
    },
    comments:[
        {
            parent:0,
            id:1,
            content:
            "wow,its mazing",
            createdAt:"1 month ago",
            score:12,
            user:{
                image:{
                    jpg:".AZ.jpg",
                    webp:".AZ.webp",
                },
                username:"amyrobson",
            },
            replies:[],
        },
        {
            parent:0,
            id: 2,
            content:
            "fffffffffffffffffffffffffffffffffffffff",
            createdAt:"2 weeks ago",
            score: 5,
            user:{
                image:{
                    jpg:".AZ.jpg",
                    webp:".AZ.webp",
                },
                username:"maxblagun",
            },
            replies:[
                {
                    parent: 2,
                    id: 1,
                    content: 
                    "ffffffffffffffffffffffffffffff",
                    createdAt:"1 weeks ago",
                    score: 4,
                     replyingTo:"maxblagun",
                     user:{
                        image:{
                            png:".AZ.jpg",
                            webp:"./images/avatars/image-remesmiron. webp",
                        },
                        username:"remesmiron",
                    },
                },
                {
                    parent: 2,
                    id: 1,
                    content:
                    "ffffffffffffffffffffffffffffffffffff",
                    createdAt : "2 days ago",
                    score: 2,
                     replyingTo:"remesmiron",
                     user:{
                        image:{
                            png:"./images/avatars/image-juliusomo.png",
                            webp:"./images/avatars/image-juliusomo. webp",
                        },
                        username:"juliusomo",
                    },  
                },
            ],
        },
    ],
};

function appendFrag(frag,parent){
    let childeren=[].slice.call(frag,childNodes,0);
    parent.appendChild(frag);
    return childeren[0] 
}

constaddomment=(body,parentId,replyTo=undefined)=>{
    let commentParent=parentId===0 ? data.comments :data.comments.filter((c)=>c.id==parentId[0].replies);
    let newComment={
        parent :parentId,
        id: commentParent.length==0 ? 1: commentParent[ commentParent.length-1].id + 1,
        content: body,
        createdAt:"Now",
        replyingTo:replyTo,
        score:0,
        replies:parent==0 ? [] : undefined,
        user:data.currentUser,
    }
    commentParent.push(newComment);
    initComments()
}

const deleteComment=(commentObject)=>{
    if(commentObject.parent==0){
        data.comments= data.comments.filter((e)=>e !=commentObject);
    }else{
       data.comments.filter((e)=>e.id===commentObject.parent)[0].replies=data.comments.filter((e)=>e.id=commentObject.parent)[0].replies;
    }
    initComments()
}

const promptDel=(commentObject)=>{
const modalWrp=document.querySelector(".modal-wrp");
modalWrp.classList.remove("invisible");
modalWrp.querySelector(".yes").addEventListener("click",()=>{
    deleteComment=(commentObject);
    modalWrp.classList.remove("invisible");
})
modalWrp.querySelector(".no").addEventListener("click",()=>{    
    modalWrp.classList.remove("invisible");
})
}

const spawnRelyInput=(parent,parentId,replyTo=undefined)=>{
    if(parent.querySelectorAll(".reply-input")){
       parent.querySelectorAll(".reply-input").forEach((e) => {
        e.remove()
       })
    }
} 

const inputTemplate=document.querySelector(".reply-input-template");
const inputNode=inputTemplate.content.clonNode(true);
const addedInput=appendFrag(inputNode,parent);
addedInput.querySelector(".bu-primary").addEventListener("click",()=>{
let commentBody=addedInput.querySelector(".cmnt-input").value;
if(commentBody.length==0)return;
addComment(commentBody,parentId,replyTo)
})

const createCommentNode=(commentObject)=>{
    const commentTemplate=document.querySelector(".comment-template");
    let createCommentNode=commentTemplate.content.clonNode(true);
    CommentNode.querySelector("usr-name").textContent=commentObject.user.username;
    CommentNode.querySelector(".usr-img").src=commentObject.user.image.webp;
    CommentNode.querySelector(".score-number").textContent=commentObject.score;
    CommentNode.querySelector(".cmnt-at").textContent=commentObject.createdAt;
    CommentNode.querySelector(".c-body").textContent=commentObject.content;
    if(commentObject.replyingTo){
        CommentNode.querySelector(".reply-to").textContent="@"+commentObject.replyingTo;
        CommentNode.querySelector(".score-plus").addEventListener("click",()=>{
            commentObject.score++;
            initComments();
        })
        CommentNode.querySelector(".score-minus").addEventListener("click",()=>{
            commentObject.score--;
            if(commentObject.score<0)commentObject.score=0;
            initComments();
        })
        if(commentObject.user.username==data.currentUser.username){
            CommentNode.querySelector(".comment").classList.add(".this-user");
            CommentNode.querySelector(".delet").addEventListener(".click",(e)=>{
                promptDel(commentObject)
            })
            CommentNode.querySelector(".edit").addEventListener(".click",()=>{
                const path=e.path[3].querySelector(".c-body");
                if(path.getAttribute("contenteditable")==false||path.getAttribute("contenteditable")==null){
                    path.setAttribute("contenteditable",true);
                    path.focus()
                }else{
                    path.removeAttribute("contenteditable")
                }
            })
           return CommentNode;
        }

    } return CommentNode;
}
const appendComment=(parentNode,CommentNode,parentId)=>{
    const bu_reply=CommentNode.querySelector(".reply");
    const appendComment=appendFrag(CommentNode,parentNode);
    const replyTo=appendCmnt.querySelector(".usr-name").textContent;
    bu_reply.addEventListener('click',()=>{
        if(parentNode.classList.containes("replies")){
          spawnRelyInput(parentNode,parentId,replyTo) 
        } else{
            spawnRelyInput(appendCmnt.querySelector(".replies"),parentId,replyTo)
        }
    })
}

function initComments(commentList=data.comments,parent=document.querySelector(".comments-wrp")){
parent.innerHTML="";
commentList.forEach((element)=> {
    let parentId=element.parent== 0 ? element.id :element.parent;
    const comment_node=createCommentNode(element);
    if(element.replies && element.replies.l >0){
        initComments(element.replies,comment_node.querySelector(".replies"));
    }
    appendComment(parent,comment_node,parentId)
})
}

initComments();

const CmntInput = document.querySelector(".reply-input");
CmntInput.querySelector(".bu-primary").addEventListener("click",()=>{
    let commentBody=cmntInput.querySelector(".cmnt-input").value;
    if(commentBody.length==0)return;
    addComment(commentBody,0);
    CmntInput.querySelector(".cmnt-input").value="";
})
function initComments(
    commentList=data.comments,
    parent=document.querySelector(".comment-wrp")
){
    parent.innerHTML="";
    commentList.forEach((element)=>{
        var parentId=element.parent==0 ? element.id :element.parent;
        const comment_node= createCommentNode(element);
        if (element.replies && element.replies.length>0){
        initComments(element.replies,comment_node.querySelector(".replies"));
    }
    appendComment(parent,comment_node,parentId);
});
}

initComments();
const cmntInput = document.querySelector(".reply-input");
cmntInput.querySelector(".bu-primary").addEventListener("click",()=>{
let commentBody=cmntInput.querySelector(".cmnt-input").value;
if( commentBody.length==0) return;
addComment(commentBody,0);
cmntInput.querySelector(".cmnt-input").value="";
});