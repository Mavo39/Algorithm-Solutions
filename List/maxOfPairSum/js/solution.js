function maxOfPairSum(arr1, arr2, x){
    let l1 = arr1.length;
    let l2 = arr2.length;

    // arr1・arr2両方空だった場合
    if(l1 <= 0 && l2 <= 0) return "no pair";

    // x未満の最大値を仮指定
    let maxValue = 0;

    if(l1 <= 0) maxValue = arr2[0];      // arr1が空の場合
    else if(l2 <= 0) maxValue = arr1[0]; // arr2が空の場合
    else maxValue = arr1[0] + arr2[0];   // 両方の配列の要素が存在する場合

    // arr1の走査
    for(let i = 0; i < l1; i++){
        // arr2の走査
        for(let j = 0; j < l2; j++){
            if(arr1[i] + arr2[j] < x && arr1[i] + arr2[j] > maxValue){
                maxValue = arr1[i] + arr2[j];
            }
        }
    }

    if(maxValue >= x) return "no pair";
    else return maxValue;
}

module.exports = maxOfPairSum;