package com.zafirasystems.www.cim2018;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private ImageView iv;
    private TextView tv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);
        iv = (ImageView) findViewById(R.id.imageview1);
        tv = (TextView) findViewById(R.id.textview1);
        Animation animation = AnimationUtils.loadAnimation(this, R.anim.splashanim);
        iv.startAnimation(animation);
        tv.startAnimation(animation);
        final Intent i = new Intent(this, HomeActivity.class);
        Thread timer = new Thread(){
            public void run(){
                try {sleep(3000);}
                catch (InterruptedException e){e.printStackTrace();}
                finally {
                    startActivity(i);
                    finish();
                }
            }

        };

        timer.start();

    }
}
