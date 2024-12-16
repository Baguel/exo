<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="mx:auto p-10 bg-grey justify-center">
    <?php if (!isset($_POST['submit'])) { ?>
        <div class="flex flex-col min-h-screen">
            <div class="flex justify-center font-bold text-2xl items-center">
                <p>mySh</p>
                <image class="text-center" src="shopping-bag-2-fill.png" alt="">
                <p>p</p>
            </div>
            <div class=" flex mt-5 justify-center items-center">
                <div class="bg-white w-[500px] h-[800px] p-5 border-2 rounded-lg">
                    <p class="text-2xl font-bold">Create a free account</p>
                    <p>Register and buy a new things</p>
                    <div>
                        <div class="space-y-5">
                            <button class="w-full h-12 mt-2 rounded-full border-2 flex bg-white justify-center items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="rgba(0,13,255,1)"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path></svg>
                                <p class="font-bold ">Sign up with META</p>
                            </button>
                            
                            <button class="w-full h-12 mt-2 bg-black rounded-full flex bg-white justify-center items-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="rgba(247,247,247,1)"><path d="M17.6874 3.0625L12.6907 8.77425L8.37045 3.0625H2.11328L9.58961 12.8387L2.50378 20.9375H5.53795L11.0068 14.6886L15.7863 20.9375H21.8885L14.095 10.6342L20.7198 3.0625H17.6874ZM16.6232 19.1225L5.65436 4.78217H7.45745L18.3034 19.1225H16.6232Z"></path></svg>
                                <p class="font-bold text-white">Sign up with X</p>
                            </button>

                            <div class="flex justify-center items-center mt-2">
                                OR
                            </div>
                        </div>
                    </div>

                    <form action="" method="POST">
                        <div>
                            <label class="font-bold">Name *</label>
                            <input class="mt-2 w-full h-10 rounded-full p-4 border-2" type="email" placeholder="Enter your name">
                        </div>
                        <div class="mt-4">
                            <label class="font-bold">Email *</label>
                            <input class=" w-full h-10 rounded-full p-4 border-2" type="email" placeholder="Enter your email">
                        </div>
                        <div class="mt-4">
                            <label class="font-bold">Password *</label>
                            <input class=" w-full h-10 rounded-full p-4 border-2" type="email" placeholder="Enter your password">
                        </div>
                        <div class="mt-4">
                            <label class="font-bold">Confirm Password *</label>
                            <input class=" w-full h-10 rounded-full p-4 border-2" type="email" placeholder="Enter the same password">
                        </div>
                        <button type="submit" name="submit" value="submit" class="w-full bg-green-500 rounded-full h-10 mt-7">Sign up</button>
                    </form>    
                    
                    <div class="flex justify-center items-center mt-3 space-x-2">
                        <p>Already Have an Account ?</p>
                        <p class="text-blue-500 underline font-semibold hover:cursor-pointer">Sign up</p>
                    </div>
                </div>
            </div>
         </div> 
        <?php } else { ?>

            <?php }?>
    </div>
</body>
</html>