<?php
if ($_SESSION['stack_destroy']) die(header("location:" . $notes_router['main']));
URL($notes_router['sign_in']) ? $main = true : $main = false;
$_SESSION['auth'] = false;
$_SESSION['user_id'] = false;
$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
!$is_page_refreshed ? $_SESSION['valid'] = true
. $_SESSION['pass_match'] = true : '';
$main ? $page_Title = 'Sign in' : $page_Title = 'Register';
require("notes/partials/template.php");
?>
<div class="flex-col py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-600"><?= $main ? 'Sign in to your account' : 'Register your account'; ?></h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="<?php echo $main ? $notes_router['REST'][0] : $notes_router['REST'][1] ?>" method="POST">
            <?= !$main ?
                '<div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-400">name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>' : ''  ?>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-400">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-400">Password</label>
                    <?= $main ? "<div class='text-sm'>
                        <a href='#' class='font-semibold text-indigo-600 hover:text-indigo-500'>Forgot password?</a>
                    </div>" : "";
                    ?>

                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <?php
                    if (!$main) {
                        print(
                            '
                    <label for="confirm password" class="block text-sm font-medium leading-6 text-gray-400">Confirm Password</label>
                                    ' .
                            "<input id='confirm' name='confirm' type='password'  required class='block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'>"
                        );
                    }
                    ?>
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <?= $page_Title ?>
                </button>
                <?php
                if (!$_SESSION['valid'] && $main) echo "<b><p style='color:#ca1629'> Invalid Username or Password</p></b>";
                else if (!$_SESSION['valid'] && !$main) echo "<b><p style='color:#ca1629'> email already taken</p></b>";
                else if (!$_SESSION['pass_match'] && !$main) echo "<b><p style='color:#ca1629'> passwords does not match</p></b>";
                ?>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            <?php
            if ($main) {
                $link = 'Register here';
                echo "Not a member?";
            } else {
                $link = 'Sign in here';
                echo "Already a member?";
            }
            ?>
            <a href="<?php echo $link == 'Register here' ? $notes_router['register'] : $notes_router['sign_in']; ?>" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><?= $link ?></a>
        </p>
    </div>
</div>