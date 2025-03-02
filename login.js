const singUpButton=document.getElementById('signUpButton')
const singInButton=document.getElementById('signInButton')
const signInForm=document.getElementById('signIn')
const signUpForm=document.getElementById('signUp')

singUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})

singInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

