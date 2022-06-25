<!DOCTYPE html>
<html lang="en">

<head>

    <title>Fifty Shades of Code</title>

</head>

<body>
    <div class='w-full h-full py-20 lg:w-full lg:h-full sm:inset-0'>
        <div class='max-w-full mx-auto p-6 flex flex-col justify-center text-center w-full h-full'>
            <div>
                <p class='text-4xl font-bold inline border-b-4 border-red-700 '>Skills</p>
                <p class='py-4'>These are the technologies I've worked with</p>
            </div>
        $foreach($skills as $skill)
            <div class='w-full grid grid-cols-1 md:grid-cols-5 md:py-0 sm:grid-cols-1 gap-4 text-center py-8'>
                <div class='shadow-lg shadow-[#A01C1C] md:px-4 py-4 hover:scale-110 duration-500'>
                    <img class='w-[175px] mx-auto' src="{{ $skill->image }}" alt="HTML icon" />
                    <p class='mt-4 md:text-sm'>{{ $skill->skill }}</p>
                </div>
        @endforeach
        </div>
    </div>
</body>

</html>
