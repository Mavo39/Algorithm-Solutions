function videosToWatch(time, dailyGoal){
    // エッジケース
    if(time.length == 0 || dailyGoal < 0) return -1;

    let total = 0;
    for(let i = 0; i < time.length; i++){
        total += time[i];
        if(total >= dailyGoal) return i+1;
    }

    return -1;
}

module.exports = videosToWatch;